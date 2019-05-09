node {
    stage('preparation') {
       
        git branch: 'master', url: 'https://github.com/FelipeLoureiro/syscor-dusk.git'
    }
    stage("composer_install") {
        // Run `composer update` as a shell script
        sh 'composer install'
    }
    stage("phpunit") {
        // Run PHPUnit
        sh 'vendor/bin/phpunit'
    }
}
