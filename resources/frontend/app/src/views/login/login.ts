import { Component, Vue, Model } from 'vue-property-decorator';

@Component
export default class Login extends Vue {
    public login: boolean = true;
    public email!: string;
    public password!: string;
    public rememberMe!: boolean;

    constructor() {
        super();
        this.email = '';
        this.password = '';
        this.rememberMe = false;
    }

    public changeForm(change: boolean): void {
        this.login = change;
    }

    public submit(): void {
        this.$auth.login({
            email: this.email,
            password: this.password,
        });
    }
}
