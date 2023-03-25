import Alpine from "alpinejs";

window.Alpine = Alpine;


Alpine.data("navbar",() => ({
    open: false,
    init() {
        this.$watch("open",(val)=>{
            val ? (document.body.style="overflow-y: hidden;") : (document.body.style="") 
        })
    },
    nt: {
        ["x-show"] : "!open",
        ["@click"](){
            this.open = !this.open;
        }
    },
    ntc: {
        ["x-show"] : "open",
        ["@click"](){
            this.open = !this.open;
        }
    },
    nc: {
        ["x-show"]:"open",
        ["@click.outside"](){
            this.open = false;
        }
    }
    
}))

Alpine.start();