#!/bin/sh

gunicorn --reload --bind 0.0.0.0:5000 src.wsgi:app