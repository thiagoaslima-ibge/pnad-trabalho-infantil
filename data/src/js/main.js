/**
 * @description Usando um IIFE para garantir que as funções não poluam o espaço global (objeto window)
 * [Explicação sobre IIFE]{@link https://developer.mozilla.org/pt-BR/docs/Glossary/IIFE}
 */
(function (window, document, $) {
  function isHTTPS() {
    return document.location.protocol === 'https:';
  }

  /**
    * @typedef {('light'|'dark')} Theme - Temas de estilo
  **/

  /**
   * @constant
   * @readonly
   * @enum { Theme }
   */
  var ThemeEnum = {
    /** @type {Theme} */
    dark: 'dark',
    /** @type {Theme} */
    light: 'light',
  };

  /**
    * @typedef {('milisegundo'|'segundo'|'minuto'|'hora'|'dia'|'semana'|'mes'|'ano')} TimeUnitKey - nome das possíveis unidades usadas para mensurar o tempo
    **/

  /**
    * @typedef {object} TimeUnit - possíveis unidades usadas para mensurar o tempo
    * @property {TimeUnitKey} key - Nome da unidade de tempo
    * @property {number} value - Valor da unidade de tempo convertido para milisegundos
  **/

  var SEGUNDO_MS = 1000;
  var MINUTO_MS = 60 * SEGUNDO_MS;
  var HORA_MS = 60 * MINUTO_MS;
  var DIA_MS = 24 * HORA_MS;
  var SEMANA_MS = 7 * DIA_MS;
  var MES_MS = 30 * DIA_MS;
  var ANO_MS = 30 * MES_MS;

  /**
   * @constant
   * @readonly
   * @type {TimeUnit[]}
   * @default
   */
  var TIME_UNIT = [
    { key: 'milisegundo', value: 1 },
    { key: 'segundo', value: SEGUNDO_MS },
    { key: 'minuto', value: MINUTO_MS },
    { key: 'hora', value: HORA_MS },
    { key: 'dia', value: DIA_MS },
    { key: 'semana', value: SEMANA_MS },
    { key: 'mes', value: MES_MS },
    { key: 'ano', value: ANO_MS },
  ];

  /**
    * @typedef {('Lax'|'None'|'Strict')} SameSiteConfiguration - opções de configuração 
  **/

  /**
    * @param {SameSiteConfiguration} value
    */
  function resolveSameSiteConfiguration(value) {
    if (!value) {
      return '';
    }
    if (value === 'None') {
      return isHTTPS ? 'SameSite=None; Secure' : '';
    }
    return ['SameSite', value].join('=');
  }

  /**
   * @param {number} expires -	Tempo pelo qual o cookie é válido 
   * @param {TimeUnitKey} expiresUnit - Unidade de tempo para a validade do cookie
   */
  function resolveExpireTimeConfiguration(expires, expiresUnit) {
    var date = new Date();
    var timeUnit = TIME_UNIT.find(item => item.key === expiresUnit);

    if (!timeUnit) {
      throw new Error('Invalid time unit key: ' + expiresUnit);
    }

    date.setTime(date.getTime() + expires * timeUnit.value);

    return ['expires', date.toUTCString()].join('=');
  }

  /**
   * All the possible options when creating a cookie
   * @typedef {Object} CookieOptions - opções de criação de cookies
   * @property {number} expires -	Tempo pelo qual o cookie é válido 
   * @property {TimeUnitKey} expiresUnit - Unidade de tempo para a validade do cookie
   * @property {SameSiteConfiguration} sameSite
   */

  /**
   * Salva um cookie na memória do navegador
   * Útil para configurações necessárias entre usos, sessoes e páginas
   * Pode ser acessado no php.
   * ATENÇÃO: Não utilizar para dados sigilosos ou sensiveis
   * @param {string} name		Nome do cookie a ser salvo no browser (usado para acesso [getCookie])
   * @param {string} value 	Conteúdo do cookie
   * @param {CookieOptions} options -	opções do cookie
   */
  function setCookie(name, value, options) {
    var expires = resolveExpireTimeConfiguration(options.expires, options.expiresUnit);
    var samesite = resolveSameSiteConfiguration(options.sameSite);
    var params = [expires, samesite, 'path=/'].filter(Boolean).join('; ');
    document.cookie = name + "=" + encodeURIComponent(value) + "; " + params;
  }

  /**
   * 
   * @param {string} name		Nome do cookie a ser recuperado no browser
   * @returns 
   */
  function getCookie(name) {//FUNCAO: Recuperacao de cookie
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (typeof value !== 'undefined' && value !== null) ? decodeURIComponent(value[1]) : null;
  }

  var theme = (function () {
    var currentTheme = 'light';

    var eventEmitter = {
      events: {
        change: []
      },

      /**
       * @param {('change')} event - Nome do evento
       * @param {(theme: Theme) => void} cb - funçao de callback
       */
      on: function onEvent(event, cb) {
        if (eventEmitter.events[event]) {
          eventEmitter.events[event].push(cb);
        }
      },

      /**
       * @param {('change')} event - Nome do evento
       * @param {Theme} data
       */
      emit: function emitEvent(event, data) {
        var callbacks = eventEmitter.events[event];
        for (var i = 0; i < callbacks.length; i++) {
          var cb = callbacks[i];
          cb(data);
        }
      }
    };

    function changeTheme() {
      switch (currentTheme) {
        case 'light':
          setTheme('dark');
          break;
        case 'dark':
          setTheme('light');
          break;
      }
    }

    /**
     * @param {Theme} theme 
     */
    function setTheme(theme) {
      var hasChanged = currentTheme !== theme;

      if (!hasChanged) {
        return;
      }

      currentTheme = theme;
      eventEmitter.emit('change', theme);
    }

    /**
     * Resgatar tema registrado em cookie ou no local storage
     * @param {('cookie' | 'localStorage')=} storage
     * @returns {Theme | undefined}
     */
     function getTheme(storage) {
      var cookieTheme = getCookie('theme') 
      var localStorageTheme = window.localStorage.getItem('theme');

      var theme = cookieTheme || localStorageTheme;

      if (storage === 'cookie') {
        var theme = cookieTheme;
      }

      if (storage === 'localStorage') {
        var theme = localStorageTheme;
      }
      
      return ThemeEnum[theme];
    }

    function init() {
      var theme = getTheme(); // Resgatar tema
      var matchMediaList;

      if (typeof window.matchMedia === 'function') {
        matchMediaList = window.matchMedia("(prefers-color-scheme: dark)");
      }

      if (theme) {
        currentTheme = theme;
      }

      if (!theme && matchMediaList) {
        theme = matchMediaList.matches ? 'dark' : 'light';

        // Ao mudar para dark mode pela primeira vez por conta de preferência de OS
        // o código do PHP terá sido gerado em light mode, sendo necessário atualizar a página de acordo.
        if (theme === 'dark') {
          setTheme(theme);
        }
      }

      /**
       * Safari não suporta listeners na API de matchMedia
       * {@link https://caniuse.com/matchmedia}
       */
      if (matchMediaList && typeof matchMediaList.addEventListener === 'function') {
        matchMediaList.addEventListener('change', function (event) {
          var theme = event.matches ? ThemeEnum.dark : ThemeEnum.light;
          setTheme(theme);
        });
      }
    }

    return {
      changeTheme,
      on: eventEmitter.on,
      init
    };
  })();

  theme.on('change',
    /** @param {Theme} theme */
    function (theme) {
      switch (theme) {
        case 'dark':
          $("body").addClass("dark-mode");
          $(".btn__dark-mode").prop('checked', true);
          break;
        case 'light':
          $("body").removeClass("dark-mode");
          $(".btn__dark-mode").prop('checked', false);
          break;
      }
      window.localStorage.setItem('theme', theme);
      setCookie('theme', theme, {
        expires: 2, 
        expiresUnit: 'semana',
        sameSite: 'None',
      });
    }
  );

  $(document).on("change", ".btn__dark-mode", theme.changeTheme);

  theme.init();

  /**
   * @description Exports some functions to the global space
   * @deprecated It should be avoided
   */
  window.getCookie = getCookie;

})(window, document, window.jQuery);

(($) => {
  $(function () {
    var alreadySetup = {};

    $("abbr[title]").each(function (index, element) {
      var title = element.getAttribute('title').toLocaleLowerCase();
      if (!alreadySetup[title]) {
        alreadySetup[title] = true;
      } else {
        /**
         * Adiciona classe para retirar o título por extenso, garantindo que só se adicione no primeiro uso na página
         * O uso da classe para "retirar" o texto é mais seguro pois caso o JS falhe por algum motivo, a informação é preservada apenas exibida mais vezes ao longo da página)
         */
        $(element).addClass('already-used-on-page');
      }
    });
  });
})(jQuery);


$(function () {

  //FUNCAO: Operacao acordeon
  var allPanels = $(".accordion__panel");//Coletar todos os paineis
  var allTriggers = $(".accordion__trigger");//Coletar todos os gatilhos
  allPanels.hide();//Ocultar todos paineis
  $(".accordion__trigger").click(function () {
    $this = $(this);
    $target = $this.parent().next(".accordion__panel");//Selecionar painel mais proximo
    $arrow = $this.children("svg");//Coletar objeto da seta painel mais proximo
    allTriggers.children("svg").css("transform", "rotate(0deg)");//Rotacionar todas as setas para posicao inicial

    if (!$this.hasClass("accordion__trigger--active")) {
      $(".accordion__trigger").removeClass("accordion__trigger--active");//Remover classe de todos os gatilhos
      allTriggers.attr("aria-expanded", false);//Definir status ARIA da expansao			
      $this.addClass('accordion__trigger--active').attr("aria-expanded", true);//Adicionar estilo e status ARIA de expansao a gatilho selecionado            
      $arrow.css("transform", "rotate(180deg)");//Rotacionar seta
      if (!$target.hasClass("accordion__panel--active")) {//Se painel mais proximo nao esta ativo
        allPanels.removeClass("accordion__panel--active").slideUp();//Ocultar todos os paineis
        $target.addClass("accordion__panel--active").slideDown();//Exibir painel mais proximo
      }
    }
    else {
      $arrow.css("transform", "rotate(0deg)");
      allTriggers.removeClass("accordion__trigger--active");//Remover classe de todos os gatilhos
      allPanels.removeClass("accordion__panel--active").slideUp();//Ocultar todos paineis
    }
  });


  $(document).on("click", ".btn_menu", function (e) {//Abrir o menu
    e.preventDefault();//Desabilitar funcao padrao
    $(".menu").animate({//Animar exibicao do menu
      right: '0'
    }, 350);
  });
  $(document).on("click", ".menu__btn-close", function (e) {//Fechar o menu
    e.preventDefault();//Desabilitar funcao padrao
    $(".menu").animate({//Animar ocultacao do menu
      right: '-20.175rem'
    }, 350);
  });
  $(document).on("click", ".menu__collapsible-btn", function (e) {//Abrir o submenu
    e.preventDefault();//Desabilitar funcao padrao    

    if ($(this).next("ul").css("display") == "none") {//Testar se submenu esta aberto
      $(this).children("svg").css("transform", "rotate(180deg)");//Rotacionar seta    
    } else {
      $(this).children("svg").css("transform", "rotate(0deg)");//Rotacionar seta    
    }

    $(this).next("ul").slideToggle();//Exibir o submenu    
  });

  $(document).on("click", ".modal_call", function (e) {//Abrir a janela modal
    e.preventDefault();//Desabilitar funcao padrao
    var modalId = "#modal_" + $(this).attr("id");//Coletar nome da janela modal a ativar
    $("body").prepend("<div id='overlay'></div>");
    $(modalId).fadeIn("slow");//Exibir janela modal
  });
  $(document).on("click", ".modal__btn-close", function (e) {//Fechar a janela modal
    e.preventDefault();//Desabilitar funcao padrao
    $(".modal").fadeOut("fast", function () {//Ocultar janela modal
      $("#overlay").remove();
    });
  });

  $(document).on("click", ".navigation__link--proceed", function (e) {//Desabilitar botao de avanco
    e.preventDefault();//Desabilitar funcao padrao	
  });

  $('.page-content').on('scroll', function () {//A cada rolagem verifica se foi atingido o final      
    proceed();//Executar funcao de permissao de avanco
  });

  $(".img-zoom__zoom-container").mousemove(function (e) {//Operar zoom em imagem
    this.style.backgroundPositionX = -e.offsetX + "px";//Reposicionar imagem no eixo X
    this.style.backgroundPositionY = -e.offsetY + "px";//Reposicionar imagem no eixo Y
  });

  $('.video-content--focusable').on('play', function (event) {//Ativar vídeo em foco		
    if (event.type == 'play') {//Testar natureza do evento - se for "play"
      if ($("#overlay").length == 0) {
        $("body").prepend("<div id='overlay'></div>");
      }
      $(this).addClass('video-content--focus');//Aplicar foco
    }
    else {//Testar natureza do evento - se nao for "play"
      $("#overlay").remove();//Aplicar overlay
      $(this).removeClass('video-content--focus');//Aplicar foco
    }
  });

  $(".hotspot-container__map, .ttorigin").each(function (i) {// Acionar tooltips
    var tooltipIndex = $(this).attr('class').split(' ')[1].substring(7, 10);
    var tooltipClass = '.tooltip' + tooltipIndex + '';
    $(tooltipClass).tooltipster({
      maxWidth: 300,
      trigger: 'custom',
      triggerOpen: {
        mouseenter: true,
        touchstart: true,
        tap: true
      },
      triggerClose: {
        mouseleave: true,
        originClick: true,
        touchleave: true,
        tap: true
      },
    });
  });

  $(document).on('click', '#overlay', function () {
    $("#overlay").remove();//Remover overlay
    $(".video-wrapper__iframe").removeClass("video-wrapper__iframe--focus");//Remover foco
    $(".video-content").removeClass('video-content--focus');//Remover foco
    $(".modal").fadeOut("fast", function () {//Ocultar janela modal
      $("#overlay").remove();//Remover overlay
    });
  });

});

$(window).load(function () {//Executar quando a pagina carregar	
  progressBar();//Executar funcao da barra de progresso
  showCurrentPageOnMenu();//Executar funcao de marcar pagina atual no meni
  proceed();//Executar funcao de permissao de avanco
  lastPage();//Executar funcao de ocultar botao de avanco na ultima pagina
});

function youtubeFocus(event) {//FUNCAO: Ativar efeito de foco no video do YouTube
  var videoReference = $(event.target.getIframe()).attr('id');//Coleter ID di vídeo ativado
  if ($(event.target.getIframe()).hasClass("video-wrapper__iframe--focusable")) {//Testar se o video e alvo de foco
    if (event.data == YT.PlayerState.PLAYING) {//Testar natureza do evento - se for "playing"
      if ($("#overlay").length == 0) {
        $("body").prepend("<div id='overlay'></div>");
      }
      $("#" + videoReference).addClass("video-wrapper__iframe--focus");//Aplicar foco
    }
    if (event.data == YT.PlayerState.ENDED) {//Testar natureza do evento - se for "ended"
      $("#overlay").remove();//Aplicar overlay
      $("#" + videoReference).removeClass("video-wrapper__iframe--focus");//Aplicar foco
    }
  }
}

function shuffle(array) {//FUNCAO: Embaralhamento de elementos em um array
  var currentIndex = array.length, temporaryValue, randomIndex;
  while (0 !== currentIndex) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
  return array;
};

function swapImages(param) {//FUNCAO: Ocultacao de tiles na capa
  $.each(param, function (i, val) {//Testar para cada elemento
    $(".grid__cell:nth-child(" + val + ")").addClass("grid__cell--hidden");//Ocultar elemento
  });
};

function coverAnimation() {//FUNCAO: Animacao dos tiles na capa
  var arr = [];//Criar array vazio
  for (var i = 1; i <= 60; i++) {//Para cada variavel i até o número 60
    arr.push(i);//Criar um tem array
  }
  arr = shuffle(arr);//Embaralhar itens do array
  arr1 = arr.slice(0, 20);//Criar array parcial
  arr2 = arr.slice(20, 40);//Criar array parcial
  arr3 = arr.slice(40);//Criar array parcial

  swapImages(arr1);//Ocultar imagens do array
  setTimeout(function () {//Definir tempo de espera
    swapImages(arr2);//Ocultar imagens do array
  }, 1500);//Tempo de espera
  setTimeout(function () {//Definir tempo de espera
    swapImages(arr3);//Ocultar imagens do array
  }, 3000);//Tempo de espera

  setTimeout(function () {//Definir tempo de espera
    $(".grid").css("display", "none");//Ocultar grid dos tiles
    $(".cover-wrapper, .cover-footer").css("opacity", "1");//Exibir elementos de conteudo da pagina
  }, 3500);//Tempo de espera
  setTimeout(function () {
    $(".course-details__container:first-child").css("opacity", "0");//Ocultar area de conhecimento e nome do curso
    $(".course-details__container:last-child").css("opacity", "1");//Exibir numero e nome da unidade
  }, 6500);//Tempo de espera
};

function lastPage() {//FUNCAO: verificar se e ultima pagina e ocultar botao de avanco
  var lastPageURL = paginas.slice(-1)[0].arquivo;//Coletar URL da ultima pagina
  var currentPageURL = location.pathname.split("/").slice(-1);//Coletar URL da pagina atual
  if (lastPageURL == currentPageURL[0])//Comparar URL da ultima pagina com URL da pagina atual
    $(".navigation__item:last-child").css("visibility", "hidden");//Ocultar botao de avanco
}

function splashPage(elm) {//FUNCAO: Alteracao da classe da pagina em destaque
  $("body").addClass("splash-page " + elm);//Adicionar pagina em destaque e modificador
  $("html").addClass("inverted-border");//Inverter cor de borda
}

function buildCarrossel(elm) {//FUNCAO: Implementar carrossel
  $(elm).slick({// Acionar carrosel
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: "<button type='button' class='panel-slider__btn panel-slider__btn--prev'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z'/><path d='M0 0h24v24H0z' fill='none'/></svg></button>",
    nextArrow: "<button type='button' class='panel-slider__btn panel-slider__btn--next'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z'/><path d='M0 0h24v24H0z' fill='none'/></svg></button>"
  });
}

function buildYouTubePlayer(elmId, videoId) {
  var player;
  // BLOCO INCLUSAO YOUTUBE - Inicio: esse bloco deve ser repetido para cada video inserido em uma mesma pagina alterando o ID do objeto-alvo e do video
  player = new YT.Player(elmId, {
    videoId: videoId,
    playerVars: { 'rel': 0 },
    events: {
      'onStateChange': youtubeFocus
    }
  });
}

function buildLineChart(chartId, chartLabels, chartDataLabels, chartData) {//FUNCAO: Criar grafico em linha
  var ctx = $(chartId);
  var chart = new Chart(ctx, {
    //defaultFontFamily = "'Roboto', sans-serif",
    defaultFontFamily: Chart.defaults.global.defaultFontFamily = "'Roboto', sans-serif",
    defaultFontFamily: Chart.defaults.global.defaultFontSize = 16,

    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: chartLabels,
      datasets: [{
        label: chartDataLabels,
        backgroundColor: 'transparent',
        borderColor: chartColor,
        borderWidth: 8,
        data: chartData,
        lineTension: 0,
        pointBackgroundColor: 'rgb(255, 255, 255)',
        pointBorderWidth: 3,
        pointRadius: 8,
      }],
    },
    options: {
      layout: {
        padding: {
          top: 20
        }
      },
      scales: {
        xAxes: [{
          gridLines: {
            drawOnChartArea: false,
            drawBorder: false,
            drawTicks: false
          },
          ticks: {
            padding: 30
          }
        }],
        yAxes: [{
          gridLines: {
            drawBorder: false,
            offsetGridLines: false,
            zeroLineColor: 'transparent'
          },
          ticks: {
            labelOffset: 15,
            padding: 10,
            mirror: true
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        backgroundColor: '#fff',
        titleFontColor: '#000',
        bodyFontColor: '#000',
        borderColor: chartColor,
        borderWidth: 1,
        cornerRadius: 0
      },
      plugins: {
        datalabels: {
          color: 'rgb(0,0,0)',
          clip: false,
          align: 'top',
          offset: 10,
          font: {
            weight: 'bold'
          }
        }
      }
    }
  });
};

function buildBarChart(chartId, chartLabels, chartDataLabels, chartData) {//FUNCAO: Criar grafico em linha
  var ctx = $(chartId);
  var chart = new Chart(ctx, {
    //defaultFontFamily = "'Roboto', sans-serif",
    defaultFontFamily: Chart.defaults.global.defaultFontFamily = "'Roboto', sans-serif",
    defaultFontFamily: Chart.defaults.global.defaultFontSize = 16,

    // The type of chart we want to create
    type: 'horizontalBar',

    // The data for our dataset
    data: {
      labels: chartLabels,
      datasets: [
        {
          label: chartDataLabels,
          backgroundColor: "rgba(154,154,154,1)",
          data: chartData
        }
      ]
    },
    options: {
      scales: {
        xAxes: [{
          gridLines: {
            drawBorder: false,
            drawTicks: false,
            zeroLineColor: '#9a9a9a'
          },
          ticks: {
            beginAtZero: true,
            padding: 20
          }
        }],
        yAxes: [{
          gridLines: {
            drawBorder: false,
            drawOnChartArea: false,
            drawTicks: false
          },
          ticks: {
            beginAtZero: true,
            padding: 20
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        backgroundColor: '#fff',
        titleFontColor: '#000',
        bodyFontColor: '#000',
        borderColor: chartColor,
        borderWidth: 1,
        cornerRadius: 0
      },
      plugins: {
        datalabels: {
          color: 'rgb(0,0,0)',
          clip: true,
          align: 'left',
          anchor: 'end',
          offset: 10,
          font: {
            weight: 'bold'
          }
        }
      }
    }
  });
};

function showCurrentPageOnMenu() {//FUNCAO: Marcacao da pagina ativa no momento no menu
  var currentPage = "a[href='" + location.pathname.substring(location.pathname.lastIndexOf("/") + 1) + "']";//Coletar URL da pagina atual
  $(currentPage).addClass("menu__current-page");//Adicionar estilo ao item da pagina atual no menu	
  $(currentPage).parents("ul").css("display", "block");//Expandir menu do item da pagina atual do menu  
  $(currentPage).parent().parent().siblings().children("svg").css("transform", "rotate(180deg)");
  $('#menu_course').animate({//Executar animacao do scroll para colocar o item no topo
    scrollTop: $(currentPage).offset().top
  }, 2000);
}

function progressBar() {//FUNCAO: Definicao da barra de progresso
  var progressCurrent = $('.progress-bar__current-page').text();//Coletar referencia do progresso atual	
  var progressTotal = $('.progress-bar__page-total').text();//Coletar referencia do total
  var pageValue = (100 / progressTotal);//Transformar total em pontos percentuais	
  $('.progress-bar__indicator').css("top", 0);//Exibir barra de progresso
  $('.progress-bar__indicator').css("right", (100 - (progressCurrent * pageValue) + "%"));//Definir posição da barra de progresso
  $('.progress-bar__percentage').text(parseInt(progressCurrent * pageValue) + "%");//Alterar WAI-ARIA Role
  $('.progress-bar').attr("aria-valuenow", (progressCurrent * pageValue));//Alterar WAI-ARIA Role
  $('.progress-bar').attr("aria-valuetext", ((progressCurrent * pageValue) + "%"));//Alterar WAI-ARIA Role*/
};

function proceed() {//FUNCAO: Permissao de avanco
  var contentContainer = $(".page-content");//Definir contexto da permissao
  if (contentContainer.hasClass("okgo")) {//Checar classe para permissao de avanco
    if (contentContainer[0].scrollHeight > contentContainer[0].clientHeight) {//Checar presenca de barra de rolagem
      if (contentContainer.scrollTop() + contentContainer.innerHeight() >= contentContainer[0].scrollHeight - 20) {//Checar se já foi rolado até o final
        allowProgress();//Executar funcao de ativacao do botao de avanco
      }
    }
    else {
      allowProgress();//Executar funcao de ativacao do botao de avanco
    }
  }
  else
    return false;
}

function allowProgress() {//FUNCAO: Ativacao do botao de avanco
  $(".navigation__link--proceed")
    .unbind("click")//Reconectar evento de ativacao
    .removeClass("navigation__link--proceed")//Remover classe que mantem aparencia de desabilitado
    .addClass("navigation__link--proceed-active")//Aplicar classe que da aparencia de habilitado
    .attr("href", nextPage);//Atribuir URL ao link
}
