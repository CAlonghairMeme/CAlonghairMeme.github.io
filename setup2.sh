#!/bin/bash
# Script created by initialize.sh for commands that require sudo.

sed "s/$dbpass=.*/$dbpass='mew66mew';/" /etc/phpmyadmin/config-db.php > /etc/phpmyadmin/config-db.php
