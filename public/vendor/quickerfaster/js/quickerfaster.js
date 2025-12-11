// QuickerFaster UI JavaScript
(function() {
    'use strict';
    
    // Initialize tooltips
    document.addEventListener('DOMContentLoaded', function() {
        // Enable Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        
        // Livewire loading indicators
        document.addEventListener('livewire:load', function() {
            // Add loading class to forms during submission
            Livewire.hook('request', ({ uri, options, respond, succeed, fail }) => {
                const form = document.querySelector('form[wire\\:submit]');
                if (form) {
                    form.classList.add('quickerfaster-loading');
                }
            });
            
            Livewire.hook('response', ({ status, component, respond, succeed, fail }) => {
                const form = document.querySelector('form[wire\\:submit]');
                if (form) {
                    form.classList.remove('quickerfaster-loading');
                }
            });
        });
    });
    
    // QuickerFaster UI Utilities
    window.QuickerFaster = {
        // Show toast notification
        toast: function(message, type = 'info', duration = 3000) {
            const toastId = 'qf-toast-' + Date.now();
            const toast = document.createElement('div');
            toast.id = toastId;
            toast.className = `toast align-items-center text-bg-${type} border-0 show`;
            toast.setAttribute('role', 'alert');
            toast.setAttribute('aria-live', 'assertive');
            toast.setAttribute('aria-atomic', 'true');
            
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;
            
            // Create container if it doesn't exist
            let container = document.getElementById('quickerfaster-toast-container');
            if (!container) {
                container = document.createElement('div');
                container.id = 'quickerfaster-toast-container';
                container.className = 'toast-container position-fixed top-0 end-0 p-3';
                document.body.appendChild(container);
            }
            
            container.appendChild(toast);
            
            // Auto remove after duration
            setTimeout(() => {
                const toastEl = document.getElementById(toastId);
                if (toastEl) {
                    toastEl.remove();
                }
            }, duration);
        },
        
        // Confirm dialog
        confirm: function(message, callback) {
            if (confirm(message)) {
                if (typeof callback === 'function') {
                    callback();
                }
                return true;
            }
            return false;
        }
    };
})();