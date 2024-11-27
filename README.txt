╔════════════════════════════════════════════════════════╗
║                Không viết vào file này.                ║
╚════════════════════════════════════════════════════════╝

*Quy trình hoạt động của mô hình MVC:          
╔════════════════════════════════════════════════════════╗
║ 1. Người dùng gửi yêu cầu (request) qua UI.            ║
╠════════════════════════════════════════════════════════╣
║ 2. Controller nhận yêu cầu, xử lý và gửi tới Model.    ║
╠════════════════════════════════════════════════════════╣
║ 3. Model thực hiện logic và trả dữ liệu cho Controller.║
╠════════════════════════════════════════════════════════╣
║ 4. Controller chuyển dữ liệu tới View.                 ║
╠════════════════════════════════════════════════════════╣
║ 5. View định dạng và hiển thị giao diện cho người dùng.║
╚════════════════════════════════════════════════════════╝

*Ưu điểm khi áp dụng mô hình MVC vào dự án:
╔═════════════════════════════════════════════════════════╗
║ 1. Tách biệt rõ ràng giữa giao diện người dùng và logic.║
╠═════════════════════════════════════════════════════════╣
║ 2. Dễ dàng bảo trì và mở rộng, vì mỗi thành phần (Model,║
║    View, Controller) độc lập với nhau.                  ║
╠═════════════════════════════════════════════════════════╣
║ 3. Khả năng tái sử dụng mã nguồn cao vì Model, View,    ║
║    Controller có thể được tái sử dụng cho nhiều phần    ║
║    khác nhau trong ứng dụng.                            ║
╠═════════════════════════════════════════════════════════╣
║ 4. Việc thay đổi giao diện không ảnh hưởng đến logic    ║
║    của ứng dụng và ngược lại.                           ║
╠═════════════════════════════════════════════════════════╣
║ 5. Quản lý mã nguồn dễ dàng hơn, giúp việc phát triển   ║
║    ứng dụng trở nên hiệu quả và linh hoạt.              ║
╚═════════════════════════════════════════════════════════╝

