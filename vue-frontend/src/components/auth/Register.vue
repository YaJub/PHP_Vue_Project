<template>
    <form @submit.prevent="register">
        <div>
            <label for="name">Name</label>
            <input id="name" v-model="form.name" type="text" required />
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" v-model="form.email" type="email" required />
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" v-model="form.password" type="password" required />
        </div>
        <div>
            <label for="confirmPassword">Confirm Password</label>
            <input id="confirmPassword" v-model="form.confirmPassword" type="password" required />
        </div>
        <button type="submit">Register</button>
        <div v-if="error" class="error">{{ error }}</div>
    </form>
</template>

<script>
export default {
    name: 'Register',
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                confirmPassword: ''
            },
            error: ''
        };
    },
    methods: {
        register() {
            if (this.form.password !== this.form.confirmPassword) {
                this.error = 'Passwords do not match.';
                return;
            }
            // Registration logic here (e.g., API call)
            this.error = '';
            // Reset form or redirect as needed
        }
    }
};
</script>

<style scoped>
@import '../../assets/css/auth.css';
</style>