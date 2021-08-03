#!/bin/sh
echo 'adding authentication to index.html file'
python build.py

echo 'saving the generated file...'
git add .
git commit -m "deploying to heroku"

echo 'deploying to Heroku'
git push heroku master