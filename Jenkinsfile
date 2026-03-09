pipeline {
    agent any
    environment {
        MODULE_PATH = 'app/code/Mageplaza/QExample'
    }
    stages {
        stage('Step1. Checkout') {
            steps {
                git branch: 'develop', url: 'https://github.com/NINJA-ZX10R/jenkins_test.git'
            }
        }
        stage('Step2. Setup Magento') {
            steps {
                sh 'bin/magento setup:upgrade'
                sh 'bin/magento setup:di:compile'
                sh 'bin/magento setup:static-content:deploy -f'
            }
        }
        stage('Step3. Run Unit Tests') {
            steps {
                sh "vendor/bin/phpunit --configuration dev/tests/unit/phpunit.xml.dist ${MODULE_PATH}"
            }
        }
    }
}
