<style>
    article {
        min-height: 100vh;
        height: 100vh;
        background: linear-gradient(-90deg, #d3d3d3, #7bcdff, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 35s ease infinite;
        color: black;
    }

    .baseline {
        position: relative;
        height: 100%;
    }

    .surrounding {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .ws-logo {
        width: 100px;
    }

    h1 {
        font-size: 5em;
        margin: 0;
    }

    .body {
        max-width: 700px;
        margin-bottom: 200px;
    }

    @keyframes gradient {
        0% {
            background-position: 0 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0 50%;
        }
    }
</style>

<script>
  import SectionHeaded from '../components/common/SectionHeaded.svelte'
</script>

<article class='centered'>
  <div class='baseline'>
    <div class='surrounding'>
      <SectionHeaded title='me'>
        <h1>i'm vegard</h1>
        <div class='body'>
          <p>
            Working as a so-called full-stack senior developer, or FSSD for short, in <img class='ws-logo' src='/images/webstep.png' alt='webstep'/>, and helps other to achieve quite awesome things!
          </p>
          <p>
            On to a bit of me! I grew up near the fjords of Norway - in Hardanger, Vestland at 60.057763/6.546085. My love for computers and things that say beep started early on, or
            to be more exact - around 1992 and Windows 3. Before I got to experience computers for the first time, me and my friends were gathering around Sega, Nintendo or Commandore.
          </p>
          <p>
            In this day and age, I'm living in Drammen, or more specific - up in the outdoors behind Drammen, in a outdoory location named Konnerud together with my amazing girlfriend!
          </p>
          <p>
            In my current employment, I'm lucky enough to get to work with a variety of cool clients, assignments, exciting opportunities and
            more which fits my lifestyle rather well - being a half-serious road-bicyclist, an enthusiastic runner and a car-nut!
          </p>
          <p>Triggered by all the magical technologies out there - and my thrive for improvement and exploration is imprinted in my soul and forehead #goexplore.</p>
        </div>
      </SectionHeaded>
    </div>
  </div>
</article>
