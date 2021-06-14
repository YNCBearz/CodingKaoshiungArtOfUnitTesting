using CKUT.Core.Services.Ch8._8._2._2;
using NUnit.Framework;

namespace CKUT.UnitTests.Ch8._8._2._2
{
    [TestFixture]
    public class LogAnalyzerInitTestVersion2
    {
        private LogAnalyzerInit _analyzer;

        [SetUp]
        public void SetUp()
        {
            _analyzer = new LogAnalyzerInit();
            _analyzer.Initialize();
        }

        [Test]
        public void IsValid_LengthBiggerThen8_IsFalse()
        {
            var valid = _analyzer.IsValid("123456789");
            Assert.IsFalse(valid);
        }


        [Test]
        public void IsValid_LengthSmallerThen8_IsTrue()
        {
            var valid = _analyzer.IsValid("1234567");
            Assert.IsTrue(valid);
        }
    }
}