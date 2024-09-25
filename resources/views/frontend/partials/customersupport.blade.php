<section class="customer-support-section">
    <div class="container">
        <div class="row">
            <!-- Left Column: Support Information -->
            <div class="col-md-6 support-info">
                <h2 class="section-heading">Customer Support</h2>
                <p class="section-description">Our dedicated support team is here to assist you with any questions or issues you may have. Whether you need help with your account, have questions about our services, or need technical assistance, we are here to ensure your experience with us is seamless.</p>
                
                <div class="support-details">
                    <div class="support-item">
                        <i class="fas fa-headset support-icon"></i>
                        <h4>24/7 Assistance</h4>
                        <p>Our support team is available around the clock to help you with any issues or questions.</p>
                    </div>
                    <div class="support-item">
                        <i class="fas fa-envelope support-icon"></i>
                        <h4>Email Support</h4>
                        <p>Email us at <a href="mailto:support@kecheicentre.com">support@kecheicentre.com</a> for prompt assistance.</p>
                    </div>
                    <div class="support-item">
                        <i class="fas fa-phone support-icon"></i>
                        <h4>Phone Support</h4>
                        <p>Call us at +254 701 616 456 for immediate help.</p>
                    </div>
                </div>
            </div>

            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


            <!-- Right Column: Contact Form -->
            <div class="col-md-6 contact-form">
                <h2 class="section-heading">Get in Touch</h2>
                <p class="section-description">Have a question or need support? Fill out the form below, and our team will get back to you as soon as possible.</p>
            
                <form action="{{ route('contact.submit') }}" method="post">
                    @csrf <!-- This directive generates a CSRF token for security -->
                    
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                    </div>
                
                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
                
            </div>
            
        </div>
    </div>
</section>
