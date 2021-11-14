import { Controller } from "stimulus";
import { createApp } from "vue";
import App from "../components/App.vue";

export default class extends Controller {
  connect() {
    let app = createApp(App);
    app.mount(this.element);
  }
}
