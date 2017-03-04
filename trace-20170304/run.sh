#!/bin/bash

php -f test.php & ./phptrace -p $!
