<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{!!URL::to('/')!!}"><img src="/img/logov2.svg" alt="logo" class="img-resposive logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{!!URL::to('/')!!}" class="navbar-brand"><span class="verde">BIO</span>SISTEMAS</a></li>
            <li class="dropdown">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{!!URL::to('/notebooks')!!}">Notebooks</a></li>
            <li><a href="{!!URL::to('/monitores')!!}">Monitores</a></li>
            <li><a href="{!!URL::to('/proyectores')!!}">Proyectores</a></li>
            <li><a href="{!!URL::to('/contacto')!!}">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
