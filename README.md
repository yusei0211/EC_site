##　ECサイト

##　インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpeg～sample6.jpegとして保存しています。

php artisan storage:link で
storageフォルダにリンク後、storage/app/public/products内に保存されると表示されます。

ショップの画像を表示する場合は、
storage/app/public/shopsフォルダを作成し、画像を保存してください。