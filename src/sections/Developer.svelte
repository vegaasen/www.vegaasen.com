<style>
  .grid-knowledge {
    display: grid;
    grid-template-columns: 25% 25% 25% 25%;
    grid-gap: 20px;
  }

  .grid-knowledge-thrice {
    display: grid;
    grid-template-columns: 35% 35%;
    grid-gap: 40px;
    justify-content: center;
  }

  blockquote {
    border-left: 2px solid #737373;
    padding-left: 27px;
    margin-left: 0;
    color: #737373;
  }

  section {
    margin: 20px 0;
  }

  @media (max-width: 900px) {
    .grid-knowledge {
      grid-template-columns: 100%;
    }

    .grid-knowledge-thrice {
      grid-template-columns: 100%;
    }
  }
</style>

<script lang="ts">
  import SectionHeaded from '../components/common/SectionHeaded.svelte'
  import CardMini from '../components/common/CardMini.svelte'
</script>

<article>
  <SectionHeaded title="languages">
    <div class="grid-knowledge">
      <CardMini title="Kotlin" backgroundUrl="/images/dev/kotlin.png">
        Kotlin have been on my radar for years. It's a beautiful language for the JVM, and is something I absolutely urge devs to try out #make(s)jvmgreatagain.
      </CardMini>
      <CardMini title="Typescript" backgroundUrl="/images/dev/typescript.jpg">
        A friend of mine once said
        <blockquote>Once you've Typescript'd you are not going back</blockquote>
        - and boy is that true. At most projects, we try to use TS now, as it helps in many corners.
      </CardMini>
      <CardMini title="Python" backgroundUrl="/images/dev/python.png">
        For me, Python is the go-to language when experimenting with Raspbian/Raspberry. It also used to be my go-to language for infrastructural bits &amp; bobs, but that have
        changed now.
      </CardMini>
      <CardMini title="Go.Lang" backgroundUrl="/images/dev/golang.png">
        Go - Oh this is some sort of love/hate relationship. At first, I wasn't eaten by the hype. However, after using it, the hype has become clear. It is a truly awesome
        language to have. Mainly used when infrastructuring from my side.
      </CardMini>
      <CardMini title="NodeJs" backgroundUrl="/images/dev/nodejs.png">
        Still my go-to language for JS development. Hopefully we soon will be all on <a href="https://deno.land/" target="_blank" rel="nofollow noopner">Deno</a>
        and we can just use Typescript on the backend too without too much fuss.
      </CardMini>
      <CardMini title="JVM/Java" backgroundUrl="/images/dev/java.png">
        Java and the JVM is still my most favorable platform out there. Its just so versatile, and gives so much flexibility. Most projects use Java in some form or another, and
        most of these on JDK11+.
      </CardMini>
    </div>
  </SectionHeaded>
  <SectionHeaded title="frameworks">
    <div class="grid-knowledge-thrice">
      <CardMini title="Ktor" backgroundUrl="/images/dev/ktor.png">
        Created by Jetbrains, it have obviously first-class citizen of Kotlin. Fluent, clear, beautiful to work with and in Kotlin - all this packed in something that grabs a
        fairly small resource hog. What's not to like! Used in a few different projects, together with e.g Koin as DI, but also without.
      </CardMini>
      <CardMini title="Micronaut" backgroundUrl="/images/dev/micronaut.svg">
        Micronaut have been used with a few clients together with Java. Its quite interesting to work with, as it reminds you of Spring, but without much more flexibility in terms
        of options of extra tools or what have you. Have not used this together with Kotlin yet, but hopefully that happens in the future. Quite blazing fast to work with, and it
        feels lightweight when working with it. Quite nice!
      </CardMini>
      <CardMini title="Spring" backgroundUrl="/images/dev/spring.png">
        Spring is still the main large player out there in the JVM web-framework-world. Lately, in combination with Kotlin and Coroutines, its been a breeze and joyful experience
        being in this stack as well - however, resource footprint within a Spring enabled app is still quite crazy.
      </CardMini>
      <CardMini title="Docker" backgroundUrl="/images/dev/docker.png">
        Being an early adopter and user of Docker, its quite amazing how few commands I actually remember when using this tool. It could be because it is mainly the same commands
        being used over and over again. Oh well, fantastic tool - and combined with docker-compose, my world is a better place.
      </CardMini>
      <CardMini title="Arrow" backgroundUrl="/images/dev/arrow.jpg">
        Not a huge framework per se, but greatly helps when coding safely and exception-free. Combine Kotlin and Arrow in your project, and bliss can be obtained, at least
        closed-to bliss. It helps on writing code fluent in a more functional style. Not that wildly spread, but used in a few projects.
      </CardMini>
      <CardMini title="React" backgroundUrl="/images/dev/react.png">
        With no surprise, and with no introduction needed, React is also used with most clients I've been with too. It is also one of my favorite libraries of all time, in the
        frontend-world. Super-concise, have a few flaws, but mainly a joy to work with - even on larger projects. Mostly used without the awful Redux framework.
      </CardMini>
      <CardMini title="Svelte" backgroundUrl="/images/dev/svelte.png">
        Svelte have been on my radar for quite some time now, but I've yet to have worked with it on a real-world application. The time I've had with the framework, is great! I can
        understand that it have some flaws in terms of scalability, but for smaller apps which should reside fast/responsive - this can be a super good fit. Will be tried
        implemented with some customer in 2021 - a personal goal right there.
      </CardMini>
    </div>
  </SectionHeaded>
</article>
