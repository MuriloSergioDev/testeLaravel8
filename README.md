# Boilerplate Laravel 8 By: Front End Team Bredi

----

## Requisitos

Para rodar esse boilerplate, verifique se possui instalados em sua máquina:

- WSL
- Docker

## Hora de subir seu container
_Nesse ponto, acredito que você já tenha feito um clone desse projeto dentro do seu wsl._

### No diretorio do seu projeto, abra o terminal WSL e rode:
```cmd
docker-compose up --buld -d
```
### Abra o repositório no seu editor de preferência. (VS Code obviamente), e no contexto do Docker, execute os comandos:

```cmd
composer install
```

```cmd
npm install
```
```cmd
copy /y .env.example .env && php artisan key:generate
```

### E tá pronto o projetinho

### Rodando o projeto
_No contexto do Docker e em terminais diferentes, execute:_
```cmd
php artisan serve
```

```cmd
npm run watch
```

### Teoricamente isso deveria funcionar...

## Deixando o projeto pronto para produção

Para otimizar os assets do projeto, rode o seguinte comando:

```cmd
npm run prod
```

Isso irá minificar os bundles no diretório `public`.

## Dicas

### Blade

Loops:

```blade
@foreach (range(1, 3) as $i)
  {{-- Componente repetido 3 vezes --}}
  @component('components.site.card-blog')
  @endcomponent  
@endforeach
```

```blade
@for ($i = 0; $i < 3; $i++)    
  <div>
    Div repetida 3 vezes
  </div>
@endfor
```

Enviando parametros:

```blade
{{-- header-title.blade.php (componente) --}}
<h1>{{ $title }}</h1>


{{-- contact-page.blade.php --}}
@component('components.site.header-title', ['title' => 'Contatos'])
@endcomponent
```

Usando slots:

```blade
{{-- header-title.blade.php (componente) --}}
<h1>{{ $title }}</h1>
<p>{{ $content }}</p>


{{-- contact-page.blade.php --}}
@component('components.site.header-title')
  @slot('title')
    Contatos
  @endslot

  @slot('content')
    Loren ipsum dolor sit amet...
  @endslot
@endcomponent
```

Usando parâmetros em conjunto com slots:

```blade
{{-- card.blade.php (componente) --}}
<div class="{{ $cardClasses }}" style="background-color: {{ $cardColor }}">
  <img src="{{ $image }}" alt="{{ $imageAlt }}" />

  <h1>{{ $title }}</h1>
  
  <p>{{ $content }}</p>
</div>


{{-- contact-page.blade.php --}}
@component('components.site.card', [
  'cardColor' => '#e3e3e3',
  'cardClasses' => 'p-4 mb-5',
  'image' => '/path/to/image.png',
  'imageAlt' => 'Uma xinforínfola.'
])

  @slot('title')
    Título do Card
  @endslot

  @slot('content')
    Loren ipsum dolor sit amet...
  @endslot

@endcomponent
```

### Lax

Efeito de desfoque na rolagem:

```html
<div class="lax" data-lax-preset="blurIn-5 fadeIn-.3">
  content
</div>
```

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
