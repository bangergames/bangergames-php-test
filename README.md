### Banger Games Test Task

Forked from: https://github.com/Labs64/laravel-boilerplate

## Docker

### Run

 Copy `.env.example` to `.env` and modify according to your environment (make sure database host set to `DB_HOST=mysql`)
```
$ cp .env.example .env
```

 Start environment
```
$ docker-compose up -d  # to start base containers
or
$ docker-compose -f docker-compose.yml -f docker-compose.utils.yml up -d  # to start base and utils containers
```

 Build project
```
$ docker exec bangergames-php-test ./dockerfiles/bin/prj-build.sh
 or
$ docker-compose run --rm bangergames-php-test ./dockerfiles/bin/prj-build.sh
```

Now you can browse the site at [http://localhost:80](http://localhost:80)  🙌

---

5. Stop environment
```
$ docker-compose down
 or
$ docker-compose -f docker-compose.yml -f docker-compose.utils.yml down
```
