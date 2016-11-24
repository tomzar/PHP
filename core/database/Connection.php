<?php


class Connection {
  // if it is static, you can access it via Connection::make, it doesn't require an instance of a class
  public static function make($config) {

          try {

                return new PDO($config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
              );

          } catch (PDOException $e) {
            die('Couldn\'t connect due to:' . $e->getMessage());
          }

    }

  }





 ?>
