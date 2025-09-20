### how to run 

cd rr_laravel

docker build -f Dockerfile -t rr_laravel .
docker run -p 80:80 -p 8000:8000 rr_laravel



### how to create project with laravel
composer create-project --prefer-dist laravel/laravel