#!/bin/bash
for filename in /var/json/*.json; do mongoimport --host database --db ultimaphp --file $filename; done;