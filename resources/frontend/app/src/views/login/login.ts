import { Component, Vue, Model } from 'vue-property-decorator';

@Component
export default class Login extends Vue {
    public login: boolean = true;

    public changeForm(change: boolean): void {
        this.login = change;
    }
}
