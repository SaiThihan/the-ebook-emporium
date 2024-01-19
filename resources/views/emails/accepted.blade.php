@component('mail::message')

# Order Accepted
Hello {{ $order->name }},

We are pleased to inform you that your order has been accepted. You can expect your book to arrive within the next few days.

We are also happy to let you know that your new eBook is now ready for download. We hope you find it enjoyable and informative.

Thank you for your purchase and for choosing Ebook Emporium for your reading needs. If you have any questions or concerns, please do not hesitate to reach out to our support team.

To download your book, simply click on the button below:

@component('mail::button', ['url' => $pdfUrl])
Download Book
@endcomponent

Best regards,

The Ebook Emporium Team
@endcomponent