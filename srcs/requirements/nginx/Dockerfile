FROM alpine:3.20.5

RUN apk add --no-cache nginx openssl

# Création des certificats SSL auto-signés (à remplacer par Let's Encrypt en prod)
RUN mkdir -p /etc/nginx/ssl \
    && openssl req -x509 -nodes -days 365 \
        -newkey rsa:2048 -keyout /etc/nginx/ssl/privkey.pem \
        -out /etc/nginx/ssl/cert.pem \
        -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=42/CN=tgerardi.42.fr"

COPY conf/nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g", "daemon off;"]
