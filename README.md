#Quy trình làm ra web localhost:

#### Trước tiên cần download các ứng dụng sau về máy:

- Xampp: https://www.apachefriends.org/download.ht

- Apache NetBeans: https://netbeans.apache.org/download/index.html

- Java: https://www.java.com/download/ie_manual.jsp (cái này là điều kiện để sử dụng được Apache NetBeans).



Sau khi tải được 3 ứng dụng trên về rồi ta tiến hành cài đặt bình thường, sau đó vào thư mục xampp -> htdocs và tạo 1 thư mục tên demo, sau đó bạn tạo 1 file index.php bên trong thư mục demo
(Lưu ý: để chạy được trên localhost bạn cần phải tạo dự án bên trong thư mục htdocs): 
![](https://cdn.discordapp.com/attachments/1098605833371267172/1114940328777101454/image.png)


Tiếp theo các bạn vào Apache NetBeans-> File-> New Project-> Next-> Finish:
![](https://cdn.discordapp.com/attachments/1098605833371267172/1114942212363534366/image.png)

Các bạn thử code 1 đoạn PHP trong file index.php vừa tạo như sau:

```php
<?php
echo 'Lực depzai 20cm ahihi!';
?>
```
Sau đó các bạn lưu file lại.

Tiếp thep ta mở ứng dụng Xampp:
![](https://media.discordapp.net/attachments/1098605833371267172/1114944634733461625/image.png)

Sau đó Start cái Apache và MySQL nếu như đoạn code của bạn sử dụng tới cơ sở dữ liệu MySQL:
![](https://cdn.discordapp.com/attachments/1098605833371267172/1114944402062848020/image.png)

Sau đó bạn vào Chrome và gõ đường dẫn http://localhost/demo/index.php,và đây là kết quả:
![](https://cdn.discordapp.com/attachments/1098605833371267172/1114945505928155196/image.png)

