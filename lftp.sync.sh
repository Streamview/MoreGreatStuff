#!/bin/bash    
HOST="moregreatstuff.ca"
USER="houspcom"
PASS="7mgteT78"
FTPURL="ftp://$USER:$PASS@$HOST"
LCD="/home/ramone/Documents/Projects/MoreGreatStuff"
RCD="/public_html/moregreatstuff.ca/"
DELETE="--delete"
lftp -c "set ftp:list-options -a;
open '$FTPURL';
lcd $LCD;
cd $RCD;
mirror --reverse --only-newer \
       $DELETE \
       --verbose \
       --exclude-glob .git/"
