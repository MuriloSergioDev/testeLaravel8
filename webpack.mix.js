const mix = require('laravel-mix');

mix
  .webpackConfig({
    devtool: "source-map"
  })
  
  /**
   * Arquivos de estilo de bibliotecas
   * Todos os arquivos serão compiladas para o arquivo bundle.css na /public
   */
  .styles([
      // Insira os caminhos das bibliotecas que usará abaixo...
      // 'node_modules/bootstrap/dist/css/bootstrap.min.css',

    ], 'public/css/bundle.css'
  )



  /**
   * Scripts de bibliotecas
   * Todos os arquivos serão compiladas para o arquivo bundle.css na /public
   */
  .scripts([
    // Insira os caminhos das bibliotecas que usará abaixo...
    // 'node_modules/bootstrap/dist/js/bootstrap.min.js',

  ], 'public/js/bundle.js')
  
  
  
  /**
   * Compilação do arquivo de estilo principal para a /public
   */
  .sass('resources/sass/main.scss', 'public/css/main.css')
  .options({
    autoprefixer: {
      options: {
        browsers: [ 'last 40 versions' ],
        grid: true
      }
    }
  })
  
  
  
  /**
   * Compilação do arquivo de scripts principal para a /public
   */
  .js('resources/js/site.js', 'public/js/main.js')


  /**
   * Gera os arquivos de mapa
   */
  .sourceMaps()


  .browserSync('http://127.0.0.1:8000/');
