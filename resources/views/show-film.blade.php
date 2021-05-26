<div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="10%" height="22" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>{{$film['title']}}</title><img src="https://i.playground.ru/e/yyp5-mwcXMy3mIAhol-Rlw.png?250x140" alt=""><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$film['title']}}</svg>

            <div class="card-body">
              <p class="card-text">{{$film['description']}}!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{route('getFilm', [$film->slug])}}"><button type="button" class="btn btn-sm btn-outline-secondary">Описани е</button></a>
                  
                </div>
                <small class="text-muted">Длительность</small>
              </div>
            </div>
          </div>
        </div>