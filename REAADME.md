## Как пользоваться
в корне, .env-example скопировать в .env и прописать желаемые настройки. 


## Разное

### генерация хеша
```bash
openssl dgst -sha384 -binary FILENAME.js | openssl base64 -A
```
```bash
echo 'sha384-' . base64_encode(hash_file('sha384', 'path-to-file', true));
```
https://www.srihash.org/

### доп литература:
https://www.youtube.com/playlist?list=PLnnF7RWwDwiP71Saw87Ae9tmfSnNWuYwC
https://habr.com/ru/companies/macloud/articles/553826/
https://sky.pro/media/chto-takoe-atributy-integrity-i-crossorigin-v-html/
https://habr.com/ru/articles/725134/
