docker rm -f ci-admin-dev
docker run -d -p 8002:80 -v "$(pwd):/var/www/html" --name ci-admin-dev mamat08nurahmat/ci-admin
