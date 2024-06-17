# Top Swear Words on Facebook

## Story

Did you know that the most popular swear word on Facebook was used more than 10.5 million times? It has a huge fan club.
If you're wondering how they know that, well, they used Machine Learning and Natural Language Processing to find out.
It is interesting, isn't it? I now challenge you to implement the data structure behind such statistics.

![qbert.jpg](media/php/top-swear-words-on-facebook/qbert.jpg ":size=300")

## What are you going to learn?

- implement `HashMap` data structure

## Tasks

1. Install the dependencies specified in `composer.json` by executing the `composer install` terminal command.
    - The `vendor` folder exists and contains at least a `phpunit` folder and an `autoload.php` file. Note that other directories can be inside `vendor` as well.

2. Create your own class with namespace `NLP` and name `WordCount`.
    - `WordCount` class exists in `src/WordCount.php` with namespace `NLP`.

3. Implement the `isEmpty()` method to check if the word count is empty or not.
    - New `isEmpty()` method exists in `WordCount` class and returns `true`, if the `hash map` is empty, `false` otherwise.

4. Implement the `get(string word)` method which returns the count of the given word or `null`, if the word is not in the `hash map`.
    - New `get()` method exists in `WordCount` class.
This method returns the count of the given word or `null`, if the word is not in the `hash map`.

5. Implement the `put(string word, int count)` method which puts the count value of the given word, if the word does not exist. It returns `null`, if there was no insertion or the given count, if there was one.
    - New `put(string word, int count)` method exists in `WordCount` class and puts the count value of the given word, if the word does not exist in the `hash map`.
It returns the given count value or `null`, if there was no insertion.

6. Implement the `remove(string word)` method which removes the given word from the `hash map`. It must return `true`, if the word existed, `false` otherwise.
    - New `remove(string word)` method exists in `WordCount` class.
This method removes the given word from the `hash map` and returns `true`, if found it or `false`, if didn't.

7. Implement the `replace(string word, int count)` method which replaces the count of the given word, if that word exists. It returns `null`, if the word does not exist or the previous value, if it does.
    - New `replace(string word, int count)` method exists in `WordCount` class and replaces the count value of the given word, if that word exists.
It returns the previous count value or `null`, if the word was not in the `hash map`.

8. Implement the `clear()` method which clears out every word from the `hash map`. It returns `true`, if the word count wasn't empty or `false`, if it was.
    - New `clear()` method exists in `WordCount` class and clears the `hash map`.
Returns `true`, if there were words to clear, `false` otherwise.

## General requirements

None

## Hints

- You can test your solution any time with the provided scripts. Just run the one corresponds to your operating system (`test.bat` file on Windows, `test.sh` on Linux / macOS).

## Background materials

- <i class="far fa-exclamation"></i> [A guide about Composer](project/curriculum/materials/pages/php/composer-package-manager.md)
- <i class="far fa-book-open"></i> [HashMap class of Java](https://docs.oracle.com/en/java/javase/12/docs/api/java.base/java/util/HashMap.html)
- <i class="far fa-book-open"></i> [TF-IDF](http://www.tfidf.com/)
- <i class="far fa-video"></i> [NLP Tokenization](https://youtu.be/Z_GGVn6LBRI)
