<?php
namespace Deployer;
require 'recipe/symfony.php';

// Configuration

set('repository', 'git@domain.com:username/repository.git');

add('shared_files', []);
add('shared_dirs', []);

add('writable_dirs', []);

// Servers

server('production', 'domain.com')
    ->user('mahesh-ambhore')
    ->identityFile()
    ->set('deploy_path', '/var/lib/jenkins/workspace/heroku_upload')
    ->pty(true);


// Tasks

desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    run('sudo systemctl restart php-fpm.service');
});
after('deploy:symlink', 'php-fpm:restart');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'database:migrate');
