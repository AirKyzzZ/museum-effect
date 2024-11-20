document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const formGroups = document.querySelectorAll('.form-group');
    const successMessage = document.querySelector('.success-message');

    // Validate form fields
    function validateField(input) {
        const formGroup = input.parentElement;
        const errorMessage = formGroup.querySelector('.error-message');
        let isValid = true;

        switch(input.type) {
            case 'email':
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                isValid = emailRegex.test(input.value);
                break;
            case 'number':
                isValid = input.value >= 1 && input.value <= 120;
                break;
            default:
                isValid = input.value.trim() !== '';
        }

        if (!isValid) {
            formGroup.classList.add('error');
            formGroup.classList.remove('success');
        } else {
            formGroup.classList.remove('error');
            formGroup.classList.add('success');
        }

        return isValid;
    }

    // Handle form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let isFormValid = true;

        // Validate all fields
        formGroups.forEach(group => {
            const input = group.querySelector('input, textarea');
            if (!validateField(input)) {
                isFormValid = false;
            }
        });

        if (isFormValid) {
            // Simulate form submission
            const formData = new FormData(form);
            
            // Here you would normally send the data to the server
            // For demonstration, we'll just show the success message
            successMessage.classList.add('show');
            
            // Reset form
            form.reset();
            formGroups.forEach(group => {
                group.classList.remove('success');
            });

            // Hide success message after 3 seconds
            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 3000);

            // Submit the form to PHP handler
            form.submit();
        }
    });

    // Real-time validation
    formGroups.forEach(group => {
        const input = group.querySelector('input, textarea');
        
        input.addEventListener('blur', function() {
            validateField(this);
        });

        input.addEventListener('input', function() {
            if (group.classList.contains('error')) {
                validateField(this);
            }
        });
    });

    // Add ripple effect to submit button
    const submitBtn = document.querySelector('.submit-btn');
    
    submitBtn.addEventListener('click', function(e) {
        if (!this.classList.contains('processing')) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const ripple = document.createElement('span');
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        }
    });
});