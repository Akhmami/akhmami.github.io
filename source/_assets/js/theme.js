import defineReactiveMagicProperty from './utils';

document.addEventListener('alpine:init', () => {
    defineReactiveMagicProperty('theme', {
        currentTheme: null,
        storedTheme: null,

        init() {
            // at first we check local storage
            this.storedTheme = localStorage.getItem('theme') ?? 'system';

            // resolve the configured theme to be set only [light, dark]
            this.currentTheme = computeTheme(this.storedTheme);
            // Apply initial theme to DOM
            applyTheme(this.currentTheme);

            // Listen for system theme changes
            let media = window.matchMedia('(prefers-color-scheme: dark)');

            media.addEventListener('change', (event) => {
                if (this.storedTheme === 'system') {
                    this.currentTheme = event.matches ? 'dark' : 'light';
                    applyTheme(this.currentTheme);
                }
            });
        },

        setTheme(newTheme) {

            this.storedTheme = newTheme;
            localStorage.setItem('theme', newTheme);

            this.currentTheme = computeTheme(newTheme);

            applyTheme(this.currentTheme);
        },

        setLight() {
            this.setTheme('light');
        },

        setDark() {
            this.setTheme('dark');
        },

        setSystem() {
            this.setTheme('system');
        },

        toggle() {
            if (this.storedTheme === 'system') {
                // If system, toggle to opposite of current computed theme
                this.setTheme(this.currentTheme === 'dark' ? 'light' : 'dark');
            } else {
                // Toggle between light and dark
                this.setTheme(this.storedTheme === 'dark' ? 'light' : 'dark');
            }
        },

        get() {
            return {
                stored: this.storedTheme,
                current: this.currentTheme,

                isLight: this.isLight,
                isDark: this.isDark,
                isSystem: this.isSystem
            };
        },

        // Getter methods for easy template usage
        get isLight() {
            return this.storedTheme === 'light';
        },

        get isDark() {
            return this.storedTheme === 'dark';
        },

        get isSystem() {
            return this.storedTheme === 'system';
        },
        // some times we need to show only light or dark not system mode, so we handle 
        // these senarions using this getter that take care when the old mode is system
        get isResolvedToLight() {
            if (this.isSystem) {
                return resolved() === 'light'
            } else {
                return this.isLight;
            }
        },
        get isResolvedToDark() {
            if (this.isSystem) {
                return resolved() === 'dark'
            } else {
                return this.isDark;
            }
        }
    })
});

// static function 
function computeTheme(themePreference) {
    if (themePreference === 'system') {
        return resolved();
    }
    return themePreference;
}
function resolved() {
    return window.matchMedia('(prefers-color-scheme: dark)').matches
        ? 'dark'
        : 'light';
}

function applyTheme(theme) {
    if (theme === 'dark') {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
}