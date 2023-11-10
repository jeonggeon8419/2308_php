<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

app: 애플리케이션의 핵심 로직이 위치하는 디렉토리입니다. 컨트롤러, 모델, 미들웨어 등이 이 디렉토리에 위치합니다.

bootstrap: 프레임워크의 초기 부트스트랩 코드가 위치하는 디렉토리입니다. 주로 프레임워크의 핵심 설정과 초기화 작업이 이루어집니다.

config: 애플리케이션의 설정 파일들이 위치하는 디렉토리입니다. 데이터베이스 연결 정보, 서비스 설정 등을 관리합니다.

database: 데이터베이스 관련 파일들이 위치하는 디렉토리입니다. 마이그레이션 파일, 시드 파일 등이 이곳에 있습니다.

public: 웹 서버의 루트 디렉토리로 지정되어 있는 디렉토리입니다. 정적 파일들(css, js 등)과 직접 접근 가능한 파일들이 이곳에 위치합니다.

resources: 리소스 파일들을 포함하는 디렉토리입니다. 뷰 템플릿, 언어 파일, 웹페이지에서 사용하는 이미지 등이 이곳에 위치합니다.

routes: 애플리케이션의 라우팅 정의 파일들이 위치하는 디렉토리입니다. 웹 라우트 및 API 라우트를 정의합니다.

storage: 캐시, 세션 파일 등 라라벨에서 사용하는 저장소들이 위치하는 디렉토리입니다.

tests: 테스트 파일들이 위치하는 디렉토리입니다. 단위 테스트, 기능 테스트 등을 작성하여 관리합니다.

vendor: Composer를 통해 설치된 패키지들이 위치하는 디렉토리입니다.

.env: 환경 설정 파일로, 애플리케이션의 환경 변수들을 설정합니다.

artisan: 명령줄 도구로, 라라벨 프레임워크를 관리하는 명령어를 실행합니다.

2..
env: 환경 설정 파일입니다. 프로젝트의 환경 변수들을 설정하는 파일로, 데이터베이스 연결 정보, 애플리케이션 키 등을 포함합니다.

artisan: Laravel의 커맨드 라인 도구입니다. 여러 가지 명령을 사용하여 프로젝트를 관리할 수 있습니다.

composer.json: Composer 패키지 관리자를 위한 설정 파일입니다. 프로젝트에서 사용하는 패키지들과 의존성을 관리합니다.

composer.lock: Composer에 의해 생성되는 파일로, 정확한 버전의 패키지 및 의존성을 기록합니다.

package.json: npm(Node Package Manager)을 위한 설정 파일입니다. 프로젝트에서 사용하는 JavaScript 패키지들을 관리합니다.

phpunit.xml: PHPUnit 테스트 스위트의 설정 파일입니다. 단위 테스트를 실행할 때 사용됩니다.

server.php: 내장 웹 서버를 시작하는 스크립트입니다. 개발 서버를 시작할 때 사용됩니다.

webpack.mix.js: 프로젝트에서 사용하는 자바스크립트와 스타일시트를 컴파일하고 번들링하는데 사용되는 웹팩 설정 파일입니다.

.gitignore: Git으로 버전 관리하지 않을 파일 및 디렉토리를 지정합니다.

README.md: 프로젝트의 설명을 포함하는 파일입니다. 프로젝트 정보나 사용 방법을 기록할 수 있습니다.

LICENSE: 프로젝트의 라이선스 정보를 담은 파일입니다.

resources: 리소스 디렉토리입니다. 뷰 템플릿, 언어 파일, 웹페이지에서 사용하는 이미지 등이 위치합니다.

routes: 라우팅 정의 파일들이 위치하는 디렉토리입니다. 웹 라우트 및 API 라우트를 정의합니다.

tests: 테스트 파일들이 위치하는 디렉토리입니다. 단위 테스트, 기능 테스트 등을 작성하여 관리합니다.
