<?php

function randomString(){

    return substr(str_shuffle('abcdefghijklmnñopqrstuvwxyz'),10,10);
}