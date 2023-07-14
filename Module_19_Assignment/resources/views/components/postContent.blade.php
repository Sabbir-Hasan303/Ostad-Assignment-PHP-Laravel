<section class="content-part">
    <div class="container2">
        <p id="articlesid"></p>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas eveniet earum unde illum rerum
            accusamus temporibus consequatur veritatis vero repellendus accusantium, laborum ipsum, nemo mollitia
            maiores vel! Vitae temporibus animi tempore blanditiis, odit doloremque atque voluptatum eveniet culpa
            molestiae nihil eius ad, consequatur voluptas mollitia voluptatem ratione esse autem reprehenderit?
            Tempora beatae dignissimos nesciunt odio vero sequi consequatur voluptatibus veniam id molestiae nostrum
            at magnam, illum totam cupiditate cumque fugit eos sint dolorum distinctio quaerat commodi quo
            repudiandae quasi? Quasi autem deserunt quaerat dicta est excepturi, repellat corrupti eius aliquam
            distinctio eos ipsam commodi laudantium illum provident odio voluptatem ducimus libero obcaecati?
            Maiores, aliquam eos. Eius ipsam ratione voluptatem praesentium! Minus sunt facere quia animi. Tenetur
            fuga neque obcaecati quod, incidunt velit aspernatur possimus nulla suscipit sapiente natus. Iure eaque,
            magnam, commodi ab similique, iusto rem sit dignissimos ad temporibus ipsum. Delectus cum placeat, quia
            ipsam nesciunt veritatis enim, at itaque expedita et quibusdam eligendi tempore eius aspernatur. Aliquam
            aspernatur fuga pariatur, error assumenda voluptates rerum, velit reprehenderit libero molestias debitis
            suscipit, beatae non quidem sint soluta numquam. Culpa esse dolor dolorem rem maxime, maiores quam
            cumque laudantium dolores voluptas modi tenetur, eius harum amet? Ea dolores illum sapiente sint
            corrupti consequuntur expedita culpa nulla doloremque eveniet perspiciatis odit, excepturi dolor in amet
            minima, ut quas facere tenetur! Animi libero adipisci vero cupiditate odit, exercitationem autem? Nihil
            laboriosam velit hic nemo quasi atque tempora mollitia quod id adipisci debitis pariatur eius inventore
            ducimus laudantium, esse, voluptas quia possimus cum quo.</p>
    </div>
</section>

<script>
    articlespart();
    async function articlespart(){
        let url = '/postDetails'

        let response = await axios.get(url);

        document.getElementById('articlesid').innerHTML = response.data['content'];
    }
</script>
