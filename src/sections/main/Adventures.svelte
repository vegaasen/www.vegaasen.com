<script lang='ts'>
  import DetailedSplitSection from '../../components/DetailedSplitSection.svelte'
  import type { DetailedOverview } from '../../types/Overview'
  import Birkebeineren from './adventure/22/Birkebeineren.svelte'
  import HardangerviddaMarathon from './adventure/22/HardangerviddaMarathon.svelte'
  import JavaZone from './adventure/22/JavaZone.svelte'
  import JotunheimenAttendee from './adventure/22/JotunheimenAttendee.svelte'
  import PorscheDays from './adventure/22/PorscheDays.svelte'

  const latestAdventures: DetailedOverview[] = [
    { image: { url: 'images/porsche-days.jpg', caption: 'Porsches on a track' }, title: 'Jotunheimen \'23', content: JotunheimenAttendee },
    { image: { url: 'images/hardangervidda-marathon.png', caption: '' }, title: 'Hardangervidda marathon', content: HardangerviddaMarathon },
    { image: { url: '', caption: '' }, title: 'JavaZone!', content: JavaZone },
    { image: { url: 'images/porsche-days.jpg', caption: '' }, title: 'Porsche Days in Rudskogen', content: PorscheDays },
    { image: { url: '', caption: '' }, title: 'Birkebeineren', content: Birkebeineren },
  ]
</script>

<DetailedSplitSection title='Latest adventures' entries={latestAdventures} />