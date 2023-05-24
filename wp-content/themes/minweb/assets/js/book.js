$(document).ready(function() {
    // Ẩn div  ban đầu
    $('#form-messages').hide();
    $('.wpcf7-response-output').hide();
  
    // Bắt sự kiện khi có thay đổi trong div wpcf7-response-output
    $('.wpcf7-response-output').bind('DOMSubtreeModified', function() {
      var responseData = $(this).text(); // Lấy dữ liệu từ div wpcf7-response-output
  
      if (responseData) {
        // Hiển thị div form-messages
        $('#form-messages').text(responseData).show();
      } else {
        // Ẩn div form-messages nếu không có dữ liệu
        $('#form-messages').hide();
      }
    });
  });
  