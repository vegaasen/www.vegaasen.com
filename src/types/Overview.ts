import type { Picture } from './Picture'

export type Overview = {
  caption: string
  link?: string
}

export type DetailedOverview = {
  image: Picture
  title: string
  content: any
}