using CKUT.Core.Services.Ch8._8._2._2;
using NUnit.Framework;

namespace CKUT.UnitTests.Ch8._8._2._2
{
    public class LogAnalyzerInitTestVersion1
    {
        [Test]
        public void IsValid_LengthBiggerThen8_IsFalse()
        {
            var logan = GetNewAnalyzer();
            var valid = logan.IsValid("123456789");
            Assert.IsFalse(valid);
        }

        [Test]
        public void IsValid_LengthSmallerThen8_IsTrue()
        {
            var logan = GetNewAnalyzer();
            var valid = logan.IsValid("1234567");
            Assert.IsTrue(valid);
        }

        private static LogAnalyzerInit GetNewAnalyzer()
        {
            var analyzer = new LogAnalyzerInit();
            analyzer.Initialize();
            return analyzer;
        }

    }
}