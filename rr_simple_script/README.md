### how to run
 
# https://docs.roadrunner.dev/docs/php-worker/worker

cd rr_simple_script
docker build -f Dockerfile -t rr_simple_script .
docker run -p 8080:8080 rr_simple_script