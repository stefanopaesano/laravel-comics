<script>
export default {
    data() {
        return {
            items: ['CHARACTER', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEO', 'FANS', 'NEWS', 'SHOP']
        };
    },
    methods: {
         console.log(items)
   }
}
</script>


    <header>
        
        <div class="nav-bar">
            <div>
                <img src="C:\Users\stefa\classe 114 boolean\vite-template\dc-logo.png" alt="">
            </div>
            <ul class="contenitore-ul active">
              <li>
                
              </li>
            </ul>
        </div>
    </header>


<style lang="scss" scoped>
.nav-bar {
    width: 100%;
    height: 150px;
    display: flex;
    align-items: center;
    .contenitore-ul {
        display: flex;
        align-items: center;
        margin-left: 500px;
        > li {
            list-style: none;
            padding: 0px;
            margin-left: 10px; 
            transition: 1.0s;
            &:hover {
                background-color: blue;
            }
        }
        &.active {
            color: rgb(12, 124, 236);
        } 
    }
}
</style>
