@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/section31.css') }}">
@endpush

<div id="customModal" class="section31-modal">
    <div class="section31-modal-content">
        <div class="section31-popup-sub-text">
            <p>Please complete the fields below and we will phone you back with accredited advice</p>
        </div>
        <form action="/submit-form" method="post" class="section31-form-container">
            @csrf
            <div class="section31-input-container">
                <input type="text" id="name" name="name" class="section31-input-field" required>
                <label for="name" class="section31-input-label">Name</label>
            </div>
            <div class="section31-input-container">
                <input type="text" id="surname" name="surname" class="section31-input-field" required>
                <label for="surname" class="section31-input-label">Surname</label>
            </div>
            <div class="section31-input-container">
                <input type="text" id="cellNumber" name="cellNumber" class="section31-input-field" required>
                <label for="cellNumber" class="section31-input-label">Cell Number</label>
            </div>
            <div class="section31-input-container">
                <input type="text" id="email" name="email" class="section31-input-field" required>
                <label for="email" class="section31-input-label">Email</label>
            </div>
            <div class="section31-input-container">
                <textarea id="commentOrQuestion" name="commentOrQuestion" rows="4" cols="50" class="section31-input-field" required></textarea>
                <label for="commentOrQuestion" class="section31-input-label">Comments or Questions</label>
            </div>

            <label class="section31-check-container">
                <input type="checkbox" id="contactPermission" required>
                <span class="section31-checkmark"></span>I hereby give TendaHealth permission to contact me.
            </label>
            <br><br>
            <div class="g-recaptcha" data-sitekey="6Lf-thsoAAAAAN1j5_otT-z5LiZIHg4UpIbCdEtF"></div>

            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <br>
            <input type="submit" value="Send Request" id="submitButton" class="section31-advice-submit">
        </form>
    </div>
</div>
