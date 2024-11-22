document.addEventListener('DOMContentLoaded', () => {

    const inputs = document.querySelectorAll('input, textarea');
    
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            if (this.value === '') {
                this.parentElement.classList.remove('focused');
            }
        });
    });


    const button = document.querySelector('button');
    button.addEventListener('click', function(e) {
        if (!document.querySelector('form').checkValidity()) return;
        
        e.preventDefault();
        
        const wave = this.querySelector('.wave');
        wave.style.transform = 'translateX(100%)';
        
        setTimeout(() => {
            document.querySelector('form').submit();
        }, 300);
    });

    const inputGroups = document.querySelectorAll('.input-group');
    inputGroups.forEach((group, index) => {
        group.style.animation = `slideIn 0.5s ease-out forwards ${index * 0.1}s`;
        group.style.opacity = '0';
    });
});


const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
`;
document.head.appendChild(style);
