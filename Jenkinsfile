pipeline {
    agent any
    environment {
        MODULE_PATH = 'app/code/Mageplaza/QExample'
    }
    stages {
        stage('Checkout') {
            steps {
                git branch: 'develop', url: 'https://github.com/NINJA-ZX10R/jenkins_test.git'
            }
        }
        stage('Setup Magento') {
            steps {
                sh 'composer install --no-dev'
                sh 'bin/magento setup:upgrade'
                sh 'bin/magento setup:di:compile'
                sh 'bin/magento setup:static-content:deploy -f'
            }
        }
        stage('Run Unit Tests') {
            steps {
                sh "vendor/bin/phpunit --configuration dev/tests/unit/phpunit.xml.dist ${MODULE_PATH}"
            }
        }
    }
}
