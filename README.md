# Compagnie Equid'Cimes

## Presentation

This a personnal project. It's a website for my medieval association, to present ouurself to the public and organizers.


## Getting Started

### Prerequisites
1. Check composer is installed
2. Check yarn & node are installed

### Install
1. Clone this project
2. Create .env.local and your bdd
3. Run composer install
4. Run yarn install
5. Run yarn encore dev to build assets

### Working
1. Run symfony server:start to launch your local php web server
2. Run yarn run dev --watch to launch your local server for assets

### Testing
1. Run php ./vendor/bin/phpcs to launch PHP code sniffer
2. Run php ./vendor/bin/phpstan analyse src --level max to launch PHPStan
3. Run php ./vendor/bin/phpmd src text phpmd.xml to launch PHP Mess Detector
4. Run ./node_modules/.bin/eslint assets/js to launch ESLint JS linter
5. Run ../node_modules/.bin/sass-lint -c sass-linter.yml -v to launch Sass-lint SASS/CSS linter
