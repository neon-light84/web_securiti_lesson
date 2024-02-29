FROM nginx:1.25

ARG CUSTOM_HOST
ENV CUSTOM_HOST ${CUSTOM_HOST}

COPY hosts/* /etc/nginx/conf.d/

# этот файл потом будет включен в конфиг хоста
RUN echo "    server_name ${CUSTOM_HOST};" > /etc/nginx/inc_server_name.conf

WORKDIR /data/site_root


EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
