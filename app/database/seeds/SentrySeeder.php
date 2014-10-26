<?php

class SentrySeeder extends Seeder {

  public function run()
  {
    DB::table('users')->delete();
    DB::table('groups')->delete();
    DB::table('users_groups')->delete();
 
    Sentry::getUserProvider()->create(array(
      'email'      => 'aron@codestack.me',
      'password'   => "codestack",
      'first_name' => 'Aron',
      'last_name'  => 'Gao',
      'activated'  => 1,
    ));
 
    Sentry::getGroupProvider()->create(array(
      'name'        => 'Admin',
      'permissions' => ['admin' => 1],
    ));
 
    // 将用户加入用户组
    $adminUser  = Sentry::getUserProvider()->findByLogin('aron@codestack.me');
    $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
    $adminUser->addGroup($adminGroup);
  }
}