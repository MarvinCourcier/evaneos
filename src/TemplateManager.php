<?php

/**
 * Class TemplateManager
 *
 * @category  Evaneos
 * @package   Evaneos
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class TemplateManager
{
    public function getTemplateComputed(Template $template, array $data)
    {
        if (!$template) {
            throw new \RuntimeException('No template given');
        }

        $replaced = clone($template);
        $replaced->setSubject($this->computeText($replaced->getSubject(), $data));
        $replaced->setContent($this->computeText($replaced->getContent(), $data));

        return $replaced;
    }

    private function computeText($text, array $data)
    {
        $quote = (isset($data['quote']) && $data['quote'] instanceof Quote) ? $data['quote'] : null;

        if ($quote) {
            $quoteFromRepository = QuoteRepository::getInstance()->getById($quote->getId());

            if (strpos($text, '[quote:destination_link]') !== false) {
                $destination = DestinationRepository::getInstance()->getById($quote->getDestinationId());
                $website     = SiteRepository::getInstance()->getById($quote->getSiteId());

                $text = str_replace('[quote:destination_link]', $website->getUrl() . '/' . $destination->getCountryName() . '/quote/' . $quoteFromRepository->id, $text);
            } else {
                $text = str_replace('[quote:destination_link]', '', $text);
            }
            
            if (strpos($text, '[quote:summary_html]') !== false) {
                $text = str_replace(
                    '[quote:summary_html]',
                    Quote::renderHtml($quoteFromRepository),
                    $text
                );
            }
            if (strpos($text, '[quote:summary]') !== false) {
                $text = str_replace(
                    '[quote:summary]',
                    Quote::renderText($quoteFromRepository),
                    $text
                );
            }

            if (strpos($text, '[quote:destination_name]') !== false) {
                $destinationOfQuote  = DestinationRepository::getInstance()->getById($quote->getDestinationId());

                $text = str_replace('[quote:destination_name]', $destinationOfQuote->getCountryName(), $text);
            }
        }

        /*
         * USER
         * [user:*]
         */
        $user = (isset($data['user']) && ($data['user']  instanceof User)) ? $data['user'] : ApplicationContext::getInstance()->getCurrentUser();

        if ($user) {
            (strpos($text, '[user:first_name]') !== false) && $text = str_replace('[user:first_name]' , ucfirst(mb_strtolower($user->getFirstname())), $text);
        }

        return $text;
    }
}
