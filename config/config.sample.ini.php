<?php $ini = <<<'EOF'
;*************************************************************************
; Hydrogen Configuration
;*************************************************************************

[general]
app_url = "http://localhost/path/to/app"
site_title = "PocketScrooge"

[cache]
engine = "No"

[database]
engine = "MysqlPDO"
host = "localhost"
port = 3306
socket = 
database = "pocketscrooge"
username = "pocketscrooge"
password = "password"
table_prefix = "ps_"

[recache]
unique_name = 'PocketScrooge'

[semaphore]
engine = "No"

[errorhandler]
log_errors = 1

[log]
engine = TextFile
logdir = cache
fileprefix = "ps_"
; 0 = No logging
; 1 = Log Errors
; 2 = Log Warnings & worse
; 3 = Log Notices & worse
; 4 = Log Info & worse
; 5 = Log Debug messages & worse
loglevel = 5

;*************************************************************************
EOF;
?>
